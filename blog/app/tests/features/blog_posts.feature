Feature: blog_posts
  In order to read a post
  As a site visitor
  I want to visit the homepage and see all posts

  Scenario: see all blog posts
    Given I am on the homepage
    Then I should see "My First Post"
    And I should see "Very Useful Content"

  Scenario: see all blog posts paginated
    Given I am on the homepage
    When I follow "Next"
    Then the response status code should be 200
    And I should see "Previous"
    And I should see "Next"
