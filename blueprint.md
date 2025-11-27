# Recipe Blog Backend Blueprint

## 1. Overview

This document outlines the plan for creating a robust, full-stack Recipe Blog website using Laravel. The application will allow users to browse recipes, view individual recipe details, and submit reviews. The backend is powered by Laravel, and the frontend is built with Blade templates and Tailwind CSS.

## 2. Project Outline

### 2.1. Style & Design

*   **Architecture:** Full-stack, following the Model-View-Controller (MVC) pattern.
*   **Frontend:** Blade templates with Tailwind CSS for styling.
*   **Backend:** Laravel for routing, database management, and business logic.
*   **Database:** MySQL.

### 2.2. Features

*   **Recipe Browsing:**
    *   Users can view a list of all recipes on the homepage.
    *   Each recipe is displayed with its image, name, and description.
*   **Recipe Details:**
    *   Users can click on a recipe to view its details, including a larger image, full description, and user reviews.
*   **User Reviews:**
    *   Readers can submit reviews for recipes, providing their name, email, rating, and a written review.
*   **Search Functionality:**
    *   A search bar allows users to filter recipes by name.

## 3. Current Plan

Here is the step-by-step plan that was executed to build the application:

1.  **Project Setup:**
    *   Set up a new Laravel project.
    *   Configured the database connection.
2.  **Database and Models:**
    *   Created migrations for the `recipes` and `reviews` tables.
    *   Defined the `Recipe` and `Review` models with their relationships.
3.  **Layout and Views:**
    *   Created a main layout file (`layout.blade.php`) with a consistent structure, including a navigation bar, main content area, and footer.
    *   Styled the layout using Tailwind CSS.
    *   Created the `welcome.blade.php` view to display a list of recipes.
    *   Created the `recipes/show.blade.php` view to display the details of a single recipe.
4.  **Controller and Routes:**
    *   Generated a `RecipeController` to handle the logic for displaying recipes and handling reviews.
    *   Defined routes in `routes/web.php` to map URLs to the controller's methods.
5.  **Functionality Implementation:**
    *   Implemented the `index` method in `RecipeController` to fetch all recipes and pass them to the `welcome` view.
    *   Implemented the `show` method to fetch a single recipe with its reviews and pass it to the `recipes.show` view.
    *   Implemented the `addReview` method to handle the submission of new reviews.
