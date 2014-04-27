Feature: navigation
  In order to feel comfortable on the site
  As a site visitor
  I want to have a navigation bar

  Scenario: navigate to the tags list
    Given I am on the homepage
    When I follow "Tags"
    Then I should be on "/tags"
