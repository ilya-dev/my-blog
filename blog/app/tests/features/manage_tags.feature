Feature:
  In order to manage posts with ease
  As the site owner
  I want to be able to associate a post with a set of tags

  Scenario: add a post that contains a tag
    Given I am logged in
    And I am on "posts/create"
    When I fill in "title" with "Some Title"
    And I fill in "content" with "This is just #awesome, my friend"
    And I press "Add"
    Then I should see "awesome" in the "#tags" element


