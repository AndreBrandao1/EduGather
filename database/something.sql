SELECT
	TAG.id as "tag_id",
    TAG.tag_title as "tag_title",
    TAG.tag_logo as "tag_logo",
    TAG.tag_description as "tag_description",
    CT.course_id as "course_id"
	FROM tags AS TAG
		LEFT JOIN course_tag AS CT ON TAG.id = CT.tag_id


SELECT
	LAN.id as "lan_id",
    LAN.lan_title as "lan_title",
    LAN.lan_logo as "lan_logo",
    LAN.lan_description as "lan_description",
    LN.course_id as "course_id"
	FROM languages AS LAN
		LEFT JOIN language_course AS LN ON LAN.id = LN.language_id





SELECT *
	FROM (SELECT
	TAG.id as "tag_id",
    TAG.tag_title as "tag_title",
    TAG.tag_logo as "tag_logo",
    TAG.tag_description as "tag_description",
    CT.course_id as "course_id"
	FROM tags AS TAG
		LEFT JOIN course_tag AS CT ON TAG.id = CT.tag_id) AS TCRS
    LEFT JOIN (SELECT
	LAN.id as "lan_id",
    LAN.lan_title as "lan_title",
    LAN.lan_logo as "lan_logo",
    LAN.lan_description as "lan_description",
    LN.course_id as "course_id"
	FROM languages AS LAN
		LEFT JOIN language_course AS LN ON LAN.id = LN.language_id) AS LCRS ON TCRS.course_id= LCRS.course_id




SELECT 
TCRS.*,
LCRS.*,
CRS.cou_title as "cou_title",
CRS.cou_description as "cou_description",
CRS.cou_logo as "cou_logo",
CRS.user_id as "user_id",
USR.first_name as "first_name",
USR.last_name as "last_name",
CATA.id as "cat_id",
CATA.cat_title as "cat_title",
CATA.cat_description as "cat_description",
CATA.cat_logo as "cat_logo"


	FROM (SELECT
	TAG.id as "tag_id",
    TAG.tag_title as "tag_title",
    TAG.tag_logo as "tag_logo",
    TAG.tag_description as "tag_description",
    CT.course_id as "course_id"
	FROM tags AS TAG
		LEFT JOIN course_tag AS CT ON TAG.id = CT.tag_id) AS TCRS
    LEFT JOIN (SELECT
	LAN.id as "lan_id",
    LAN.lan_title as "lan_title",
    LAN.lan_logo as "lan_logo",
    LAN.lan_description as "lan_description",
    LN.course_id as "course_id"
	FROM languages AS LAN
		LEFT JOIN language_course AS LN ON LAN.id = LN.language_id) AS LCRS ON TCRS.course_id= LCRS.course_id
        LEFT JOIN courses AS CRS ON CRS.id = TCRS.course_id
        LEFT JOIN users AS USR ON USR.id = CRS.user_id
        LEFT JOIN categories AS CATA ON CATA.id = CRS.cat_id









    -- //jad optio

    SELECT
    crs.id as "Course ID",
    crs.cou_title as "Course Name",
    crs.cou_description as "Course Description",
    crs.cou_logo as "Course Logo",
    crs.cou_statue as "Course Status",
    usrs.id AS "User ID",
    usrs.first_name AS "Teacher First Name",
    usrs.last_name AS "Teacher Last Name",
    cat.id AS "Category ID",
    cat.cat_title AS "Category Title",
    cat.cat_description AS "Category Description",
    cat.cat_logo AS "Category Logo",
    cat.tag_id AS "Tag ID"
FROM courses AS crs
INNER JOIN users AS usrs ON crs.user_id = usrs.id
INNER JOIN (
    SELECT categories.id, categories.cat_title, categories.cat_description, categories.cat_logo, tags.id AS tag_id FROM categories
    INNER JOIN category_tag AS ctgtag ON categories.id = ctgtag.category_id
    INNER JOIN tags ON ctgtag.tag_id = tags.id
) AS cat ON crs.cat_id = cat.id