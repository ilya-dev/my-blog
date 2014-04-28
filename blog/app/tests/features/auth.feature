Feature: authorization on the site
  In order to add posts
  As the site owner
  I want to be able to log in and log out

  Scenario: attempt to log in with invalid credentials
    Given I am on "login"
    When I fill in "email" with "invalid email"
    When I fill in "password" with "invalid password"
    When I press "Get in!"
    Then I should be on "login"
    And I should see "The email must be a valid email address"
    And I should see "The selected email is invalid"

