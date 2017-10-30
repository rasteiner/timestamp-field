<?php

class TimestampField extends DateField {
    public function validate() {
        $v = $this->result();

        // returns not false (or 0)
        if($v == false) {
            return false;
        }

        // must be a number
        if(!is_numeric($v)) {
            return false;
        }

        // convert to unix timestamp if milliseconds are expected
        if($this->ms()) {
            $v = (int) ($v / 1000);
        }

        try {
            new DateTime('@' . $v);
        } catch(Exception $e) {
            return false;
        }
        return true;
        
    }

    // convert timestamp to Y-m-d
    public function value() {
        $v = $this->value;

        if($this->ms()) {
            $v = (int) ($v / 1000);
        }

        return date('Y-m-d', $v);
    }

    // convert Y-m-d to timestamp
    public function result() {
        $v = get($this->name());
        $v = strtotime($v);

        if($this->ms()) {
            $v *= 1000;
        }
        return $v;
    }
}
