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

  Scenario: attempt to add an empty post
    Given I am logged in
    And I am on "posts/create"
    When I press "Add"
    Then I should see "The title field is required"
    And I should see "The content field is required"

  Scenario: click the edit button on a post page
    Given I am logged in
    And I am on "posts/1"
    When I follow "Edit"
    Then I should be on "posts/1/edit"
    And the response status code should be 200

  Scenario: the edit button should not be displayed if you are a guest
    Given I am on "posts/1"
    Then I should not see "Edit"

  Scenario: see the contents of the post you edit
    Given I am logged in
    And I am on "posts/1/edit"
    Then I should see "My First Post"
    And I should see "Very Useful Content"

  Scenario: fill in the edit form and save the changes
    Given I am logged in
    And I am on "posts/1/edit"
    When I press "Save the changes"
    Then I should be on "posts/1"
    And I should see "My First Post"
    And I should see "Very Useful Content"

  Scenario: leave the edit form empty and attempt to save the changes
    Given I am logged in
    And I am on "posts/1/edit"
    When I fill in "title" with ""
    And I fill in "content" with ""
    And I press "Save the changes"
    Then I should be on "posts/1/edit"
    And I should see "The title field is required"
    And I should see "The content field is required"

  Scenario: remove a post
    Given I am logged in
    And I am on "posts/1?pretend=1"
    When I press "Remove"
    Then I should be on "posts"

