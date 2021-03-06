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

  Scenario: log in with valid credentials
    Given I am on "login"
    When I fill in "email" with "foo@bar.com"
    When I fill in "password" with "password"
    When I press "Get in!"
    Then I should not see "The email must be a valid email address"
    And I should not see "The selected email is invalid"

  Scenario: attempt to log in with an invalid password
    Given I am on "login"
    When I fill in "email" with "foo@bar.com"
    When I fill in "password" with "invalid password"
    When I press "Get in!"
    Then I should be on "login"
    And I should see "The password is invalid"

  Scenario: it displays the logout button when you're logged in
    Given I am on "login"
    When I fill in "email" with "foo@bar.com"
    When I fill in "password" with "password"
    When I press "Get in!"
    Then I should see "Logout"
    Then I should not see "Login"

  Scenario: it redirects you to the login page when you try to logout
    Given I am on "logout"
    Then I should be on "login"

