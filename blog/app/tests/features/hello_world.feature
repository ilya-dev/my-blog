Feature: hello_world
  In order to be happy
  As a user
  I want to visit the main page and see "Hello, world!"

Scenario: see "Hello, world!" on the main page
  Given I am on the homepage
  Then I should see "Hello, world!"
