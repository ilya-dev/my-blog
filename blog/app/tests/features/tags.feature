Feature:
  In order to see the tags list
  As a site visitor
  I want to visit "/tags"

  Scenario: see all tags
    Given I am on "/tags"
    Then the response status code should be 200
    And I should see "Tags"
    And I should see "programming"
