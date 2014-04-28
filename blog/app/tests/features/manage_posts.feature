Feature: manage_posts
  In order to make the visitors happy
  As the site owner
  I want to be able to create, edit and delete posts

  Scenario: add a post
    Given I am logged in
    And I am on "posts/create"
    When I fill in "title" with "Some Title"
    When I fill in "content" with "Some Content"
    When I press "Add"
    Then I should see "Some Title"
    And I should see "Some Content"


