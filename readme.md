# Timestamp Field

A date field that stores as timestamp.


# Install

Download and copy into plugins folder, rename the copied folder to "timestamp"

# Usage

Works like the core kirby [date field](https://getkirby.com/docs/cheatsheet/panel-fields/date). But set the field `type` to `timestamp` instead.

## Use with javascript timestamp

You can store the value also in milliseconds since epoch (the "javascript timestamp") by setting the `ms` argumento to true:

```yml
  entry_date: 
    label: Date
    type: timestamp
    translate: false
    format: DD.MM.YYYY
    ms: true
```

# Known issues

The `override` and `default` properties currently don't work correctly. 