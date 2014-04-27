Feature: blog_posts
  In order to read a post
  As a site visitor
  I want to visit the homepage and see all posts

  Scenario: see all blog posts
    Given I am on the homepage
    Then I should see "My First Post"
    And I should see "Very Useful Content"
