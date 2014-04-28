Feature: the dashboard
  In order to manage the blog
  As the site owner
  I want to have quick access to all its functions

  Scenario: quickly navigate to "posts/create"
    Given I am logged in
    And I am on "dashboard"
    When I follow "Add a post"
    Then I should be on "posts/create"


