# knpTime

In your application, use `knpTime::getTime()` each time you need to rely on the current time.

    // Replace:
    if($time < time()) {
      …

    // by
    if($time < knpTime::getTime()) {
      …

This way you can manually set the current time in your functional tests:

    knpTime::setDate('2010-01-01');
    // Test your application as if we were the 2010-01-01
    …
    knpTime::reset(); // Reset the time to use the default "time()" function
    