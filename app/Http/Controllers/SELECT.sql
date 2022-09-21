SELECT
    courses.id as "Course ID",
    courses.cou_title as "Course Name",
    courses.cou_description as "Course Description",
    courses.cou_logo as "Course Logo",
    courses.cou_statue as "Course Status",
    users.id AS "User ID",
    users.first_name AS "Teacher First Name",
    users.last_name AS "Teacher Last Name",
    categories.cat_title AS "Category Title",
    categories.cat_description AS "Category Description",
    categories.cat_logo AS "Category Logo"
FROM courses
INNER JOIN users ON courses.user_id = users.id
INNER JOIN categories ON courses.cat_id = categories.id