# Introduction

This plugin was contributed by the Blackboard Product Development team.  Blackboard is an education technology company
dedicated to bringing excellent online teaching to institutions across the globe.  We serve colleges and universities,
schools and organizations by supporting the software that educators use to manage and deliver instructional content to
learners in virtual classrooms.

This plugin only serves as a way to distribute the AWS SDK for PHP.

# How to update the SDK

Make any necessary updates to the `composer.json` file.  Usually nothing needs to change unless upgrading to the next
major version.  Then, from within this project, run this command:

    composer update --prefer-dist --optimize-autoloader

Then stage changes:

    git add -A vendor composer.*

If everything looks good, then commit the changes.  Please include SDK version in the commit message.  Lastly,
update the `thirdpartylibs.xml` with new versions and any new libraries.
