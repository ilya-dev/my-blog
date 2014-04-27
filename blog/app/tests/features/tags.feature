Feature: tags
  In order to see the tags list
  As a site visitor
  I want to visit "/tags"

  Scenario: see all tags
    Given I am on "/tags"
    Then the response status code should be 200
    And I should see "Tags"
    And I should see "programming"

  Scenario: see all tags linked to a post
    Given I am on "/posts/1"
    Then I should see "programming" in the "#tags" element

  Scenario: see all posts linked to a tag
    Given I am on "/tags/1"
    Then the response status code should be 200
    And I should see "programming"
    And I should see "My First Post"
    And I should see "Very Useful Content"

