Feature: navigation
  In order to feel comfortable on the site
  As a site visitor
  I want to have a navigation bar

  Scenario: navigate to the tags list
    Given I am on the homepage
    When I follow "Tags"
    Then I should be on "/tags"

  Scenario: navigate to the homepage
    Given I am on "/tags"
    When I follow "Home"
    Then I should be on "/"

  Scenario: a link becomes inactive
    Given I am on the homepage
    When I follow "Tags"
    Then I should see "Tags" in the "li.active" element

  Scenario: a post title points to a page
    Given I am on the homepage
    When I follow "My First Post"
    Then I should be on "/posts/1"

  Scenario: a tag points to a page
    Given I am on "/posts/1"
    When I follow "programming"
    Then I should be on "/tags/1"

  Scenario: a tag on the tags list page points to a page
    Given I am on "/tags"
    When I follow "programming"
    Then I should be on "/tags/1"

  Scenario: the login button is displayed
    Given I am on the homepage
    When I follow "Login"
    Then I should be on "login"

  Scenario: the admin dashboard is available for use
    Given I am logged in
    And I am on "dashboard"   
    Then the response status code should be 200
    And I should see "Dashboard"

  Scenario: the admin dashboard can be reached using the navigation bar
    Given I am logged in
    And I am on the homepage
    When I follow "Dashboard"
    Then I should be on "dashboard"

    
