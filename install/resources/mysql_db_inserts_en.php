<?php
$inserts[] = "INSERT INTO pbb_avatar (id, avatar_path) VALUES
(1, 'look/images/avatar/Aeroplane.gif'),
(2, 'look/images/avatar/Fish.gif'),
(3, 'look/images/avatar/Golfball.gif'),
(4, 'look/images/avatar/Green-haze.gif'),
(5, 'look/images/avatar/Leaf.gif'),
(6, 'look/images/avatar/Melon.gif'),
(7, 'look/images/avatar/Meow.gif'),
(8, 'look/images/avatar/Orange-sticks.gif'),
(9, 'look/images/avatar/Pink-sea.gif'),
(10, 'look/images/avatar/Woof.gif'),
(11, 'look/images/avatar/Wub.gif'),
(12, 'look/images/avatar/Crazyman.jpg'),
(13, 'look/images/avatar/Dolphin.jpg'),
(14, 'look/images/avatar/Hammer-man.jpg'),
(15, 'look/images/avatar/PowerBB1.jpg'),
(16, 'look/images/avatar/PowerBB.jpg'),
(17, 'look/images/avatar/Whale.jpg'),
(18, 'look/images/avatar/coof.jpg');";


$inserts[] = "INSERT INTO pbb_blocks (id, title, text, place_block, sort, active) VALUES
(1, 'Main Sections', '{template}portal_main_categories{/template}', 'left', 1, 1),
(2, 'statistics', '{template}portal_static{/template}', 'left', 2, 1),
(3, 'clock', '{template}portal_clock{/template}', 'left', 3, 1),
(4, 'Calendar', '{template}portal_calendar{/template}', 'center', 2, 1),
(5, 'latest news', '{template}portal_last_news{/template}', 'center', 1, 1),
(6, 'main menu', '{template}portal_main_menu{/template}', 'right', 1, 1),
(7, 'Whos Online', '{template}portal_online{/template}', 'right', 2, 1),
(8, 'Latest Posts', '{template}portal_latest_posts{/template}', 'right', 3, 1);";


$inserts[] = "INSERT INTO pbb_email_msg (id, title, text) VALUES
(1, 'Change password request', 'welcome [MySBB]username[/MySBB]<br /><br />You have requested to change your password in the forum. To complete and change the steps please click on this link:<a href=\"[MySBB]change_url[/MySBB]\">[MySBB]change_url[/MySBB]</a><br /><br />If you do not request a password change please click on the following link to cancel your order: <a href=\"[MySBB]cancel_url[/MySBB]\">[MySBB]cancel_url[/MySBB]</a><br /><br />Regards with management: [MySBB]board_title[/MySBB]'),
(2, 'Request to change your email address', 'welcome  [MySBB]username[/MySBB]<br /><br />You have requested to change your e-mail in the forum, to complete the steps and change it please click on this link: <a href=\"[MySBB]change_url[/MySBB]\">[MySBB]change_url[/MySBB]</a><br /><br />If you do not request an email change, please click on the following link to cancel your order: <a href=\"[MySBB]cancel_url[/MySBB]\">[MySBB]cancel_url[/MySBB]</a><br /><br />Regards with management: [MySBB]board_title[/MySBB]'),
(3, 'Report a bad topic', '<p>Hello Dear Admin, A member of the visitors has reported the following topic: <a href=\"[MySBB]subject_url[/MySBB]\">[MySBB]subject_url[/MySBB]</a></p>'),
(4, 'Activation of membership', 'welcome  [MySBB]username[/MySBB] <br /><br />Thank you for registering at[MySBB]board_title[/MySBB] , Please activate the membership to be able to write in the forum and join the group of members<br /><br />To activate your membership please click on the following link:<br /> <a href=\"[MySBB]url[/MySBB]\">[MySBB]url[/MySBB]</a><br /><br />Regards with management: [MySBB]board_title[/MySBB]');";


$inserts[] = "INSERT INTO pbb_ex (id, Ex, max_size, mime_type) VALUES
(1, '.zip', '20000', ''),
(2, '.txt', '2000', ''),
(3, '.jpg', '2000', ''),
(4, '.gif', '2000', ''),
(5, '.bmp', '2000', ''),
(6, '.doc', '2000', ''),
(7, '.pdf', '2000', ''),
(8, '.png', '2000', ''),
(9, '.psd', '2000', ''),
(10, '.jpe', '2000', ''),
(11, '.rar', '2000', '');";


$inserts[] = "INSERT INTO pbb_group (id, title, username_style, user_title, forum_team, banned, view_section, download_attach, download_attach_number, write_subject, write_reply, upload_attach, upload_attach_num, edit_own_subject, edit_own_reply, del_own_subject, del_own_reply, write_poll, vote_poll, no_posts, use_pm, send_pm, resive_pm, max_pm, min_send_pm, sig_allow, sig_len, group_mod, del_subject, del_reply, edit_subject, edit_reply, stick_subject, unstick_subject, move_subject, close_subject, usercp_allow, admincp_allow, search_allow, memberlist_allow, vice, show_hidden, view_usernamestyle, usertitle_change, onlinepage_allow, allow_see_offstyles, admincp_section, admincp_option, admincp_member, admincp_membergroup, admincp_membertitle, admincp_admin, admincp_adminstep, admincp_subject, admincp_database, admincp_fixup, admincp_ads, admincp_template, admincp_adminads, admincp_attach, admincp_page, admincp_block, admincp_style, admincp_toolbox, admincp_smile, admincp_icon, admincp_avater, group_order, admincp_contactus, send_warning, can_warned, hide_allow, visitormessage, see_who_on_topic, reputation_number, admincp_chat, admincp_extrafield, admincp_lang, admincp_emailed, admincp_warn, admincp_award, admincp_multi_moderation, view_subject, review_subject, review_reply, view_action_edit, topic_day_number, groups_security, profile_photo) VALUES
(1, 'Administrator', '<strong><em><span style=\"color: #800000;\">[username]</span></em></strong>', 'Administrator', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 100, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1),
(2, 'Deputy Administrator', '<strong><span style=\"color: #FF0000;\">[username]</span></strong>', 'Deputy Administrator', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 1, 0, 1, 1, 1, 50, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1),
(3, 'Moderators', '<strong><span style=\"color: #0000FF;\">[username]</span></strong>', 'Moderator', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2000, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 1, 1, 1, 30, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1),
(4, 'Members', '<span style=\"color: #000000;\">[username]</span>', 'Member', 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 2000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 1, 1, 1, 1, 10, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1),
(5, 'Validating', '<span style=\"color: #008080;\">[username]</span>', 'Validat', 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0, 1, 0, 1, 1, 10, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0),
(6, 'Banneds', '<span style=\"color: #FF0000;\">[username]</span>', 'Banned', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(7, 'Guests', '[username]', 'Guest', 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0),
(8, 'General Supervisor', '<strong><span style=\"color: #800000;\">[username]</span></strong>', 'General Supervisor', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 1, 2, 0, 1, 0, 1, 1, 1, 50, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1);";


$inserts[] = "INSERT INTO pbb_info (id, var_name, value) VALUES
(1, 'title', ''),
(2, 'show_onlineguest', '0'),
(3, 'perpage', '12'),
(4, 'subject_perpage', '12'),
(5, 'show_subject_all', '0'),
(6, 'send_email', ''),
(7, 'avatar_perpage', '18'),
(8, 'admin_email', ''),
(9, 'MySBB_version', '3.0.3'),
(10, 'Sat', '1'),
(11, 'Sun', '1'),
(12, 'Mon', '1'),
(13, 'Tue', '1'),
(14, 'Wed', '1'),
(15, 'Thu', '1'),
(16, 'Fri', '1'),
(17, 'fastreply_allow', '1'),
(18, 'download_path', 'download'),
(19, 'def_group', '4'),
(20, 'adef_group', '4'),
(21, 'def_style', '1'),
(22, 'board_close', '0'),
(23, 'board_msg', ''),
(24, 'use_list', 'xa-4c4700355e83e612'),
(25, 'supermember_logs', '0'),
(26, 'page_max', '5'),
(27, 'reg_o', '1'),
(28, 'captcha_o', '1'),
(29, 'time_out', '1440'),
(30, 'samesubject_show', '1'),
(31, 'reg_less_num', '3'),
(32, 'reg_max_num', '25'),
(33, 'reg_pass_min_num', '5'),
(34, 'reg_pass_max_num', '25'),
(35, 'post_text_min', '5'),
(36, 'post_text_max', '30000'),
(37, 'post_title_min', '4'),
(38, 'post_title_max', '99'),
(39, 'upload_avatar', '1'),
(40, 'max_avatar_width', '650'),
(41, 'max_avatar_height', '850'),
(42, 'reg_close', '0'),
(43, 'msg_title_temp', ''),
(44, 'msg_content_temp', ''),
(45, 'confirm_on_change_mail', '0'),
(46, 'confirm_on_change_pass', '0'),
(47, 'allow_avatar', '1'),
(48, 'allow_apsent', '1'),
(49, 'ads_num', '0'),
(50, 'smiles_cache', 'a:13:{i:0;a:3:{s:2:\"id\";s:1:\"1\";s:11:\"smile_short\";s:2:\":)\";s:10:\"smile_path\";s:28:\"look/images/smiles/smile.gif\";}i:1;a:3:{s:2:\"id\";s:1:\"2\";s:11:\"smile_short\";s:2:\";)\";s:10:\"smile_path\";s:29:\"look/images/smiles/wink_3.gif\";}i:2;a:3:{s:2:\"id\";s:1:\"3\";s:11:\"smile_short\";s:6:\":roll:\";s:10:\"smile_path\";s:31:\"look/images/smiles/rolleyes.gif\";}i:3;a:3:{s:2:\"id\";s:1:\"4\";s:11:\"smile_short\";s:2:\":D\";s:10:\"smile_path\";s:31:\"look/images/smiles/biggrin2.gif\";}i:4;a:3:{s:2:\"id\";s:1:\"5\";s:11:\"smile_short\";s:6:\":cool:\";s:10:\"smile_path\";s:27:\"look/images/smiles/cool.gif\";}i:5;a:3:{s:2:\"id\";s:1:\"6\";s:11:\"smile_short\";s:5:\":lol:\";s:10:\"smile_path\";s:28:\"look/images/smiles/laugh.gif\";}i:6;a:3:{s:2:\"id\";s:1:\"7\";s:11:\"smile_short\";s:2:\":(\";s:10:\"smile_path\";s:26:\"look/images/smiles/sad.gif\";}i:7;a:3:{s:2:\"id\";s:1:\"8\";s:11:\"smile_short\";s:5:\":mad:\";s:10:\"smile_path\";s:28:\"look/images/smiles/mad_1.gif\";}i:8;a:3:{s:2:\"id\";s:1:\"9\";s:11:\"smile_short\";s:2:\":#\";s:10:\"smile_path\";s:31:\"look/images/smiles/blushing.gif\";}i:9;a:3:{s:2:\"id\";s:2:\"10\";s:11:\"smile_short\";s:4:\":@@:\";s:10:\"smile_path\";s:28:\"look/images/smiles/blink.gif\";}i:10;a:3:{s:2:\"id\";s:2:\"11\";s:11:\"smile_short\";s:5:\":yes:\";s:10:\"smile_path\";s:26:\"look/images/smiles/yes.gif\";}i:11;a:3:{s:2:\"id\";s:2:\"12\";s:11:\"smile_short\";s:4:\":no:\";s:10:\"smile_path\";s:27:\"look/images/smiles/no_1.gif\";}i:12;a:3:{s:2:\"id\";s:2:\"13\";s:11:\"smile_short\";s:5:\":hmm:\";s:10:\"smile_path\";s:24:\"look/images/smiles/g.gif\";}}'),
(51, 'forums_cache', ''),
(52, 'subforums_cache', ''),
(53, 'sectiongroup_cache', ''),
(54, 'subject_number', '0'),
(55, 'reply_number', '0'),
(56, 'member_number', '0'),
(57, 'last_member', ''),
(58, 'last_member_id', '0'),
(59, 'floodctrl', '30'),
(60, 'description', 'This program uses the PBBoard Forum to learn more go to www.pbboard.info'),
(61, 'keywords', 'PBBoard,Power,bulletin,board,forums,forum,pbboard.info'),
(62, 'content_language', 'en'),
(63, 'content_dir', 'ltr'),
(64, 'lasts_posts_bar_dir', 'left'),
(65, 'special_bar_dir', 'left'),
(66, 'max_online_date', ''),
(67, 'chat_bar_dir', 'left'),
(68, 'def_lang', '2'),
(69, 'charset', 'utf-8'),
(70, 'toolbox_show', '1'),
(71, 'smiles_show', '1'),
(72, 'icons_show', '1'),
(73, 'title_quote', '1'),
(74, 'close_stick_activate', '1'),
(75, 'timestamp', '0'),
(76, 'timesystem', 'h:i A'),
(77, 'online_now_section', '1'),
(78, 'online_now_subject', '1'),
(79, 'resize_imagesAllow', '1'),
(80, 'default_imagesW', '400'),
(81, 'default_imagesH', '600'),
(82, 'wordwrap', '50'),
(83, 'create_date', '1551040731'),
(84, 'icon_path', 'look/images/icons/'),
(85, 'sectiongroup_number', '0'),
(86, 'subsections_number', '0'),
(87, 'sections_number', '0'),
(88, 'smiles_number', '0'),
(89, 'today_date_cache', '0'),
(90, 'today_number_cache', '0'),
(91, 'adress_bar_separate', '&raquo;'),
(92, 'ajax_search', '0'),
(93, 'ajax_register', '0'),
(94, 'ajax_freply', '0'),
(95, 'get_group_username_style', '0'),
(96, 'ajax_moderator_options', '0'),
(97, 'reg_Sat', '1'),
(98, 'reg_Sun', '1'),
(99, 'reg_Mon', '1'),
(100, 'reg_Tue', '1'),
(101, 'reg_Wed', '1'),
(102, 'reg_Thu', '1'),
(103, 'reg_Fri', '1'),
(104, 'admin_notes', ''),
(105, 'pm_feature', '1'),
(106, 'default_avatar', 'default_avatar.gif'),
(107, 'no_describe', '1'),
(108, 'no_moderators', '1'),
(109, 'no_sub', '1'),
(110, 'warning_number_to_ban', '10'),
(111, 'members_send_pm', '7'),
(112, 'activate_last_static_list', '0'),
(113, 'last_static_num', '5'),
(114, 'last_posts_static_num', '10'),
(115, 'forum_id_not_in_static', '0'),
(116, 'activate_lasts_posts_bar', '0'),
(117, 'forum_id_not_in_lasts_posts_bar', '0'),
(118, 'lasts_posts_bar_num', '10'),
(119, 'activate_special_bar', '0'),
(120, 'subject_describe_show', '1'),
(121, 'rules', 'You read these laws so as not to arrest or violation: <br /> - Prevent the threads and posts with a view to attacking a person or a country government or the people and exposure to religions. <br /> - prevents use of the name is a decent when youRegistration or vague letters, numbers, or e-mail. <br /> - prevent the penetration topics and Alhecrz, or ask threads violation in order to penetrate the sites or off, in order to prevent proliferation. <br /> - must be adhered to ethics talk and dialogue and not to be subjected to any personoffended or defamation. <br /> after reading the terms and Join Any violation issued to you will take action necessary against you or stop your membership.'),
(122, 'censorwords', 'equiv'),
(123, 'activate_closestick', '1'),
(124, 'reputationallw', '1'),
(125, 'show_reputation_number', '10'),
(126, 'show_rating_num_max', '5'),
(127, 'rating_show', '1'),
(128, 'max_online', '1'),
(129, 'smiles_nm', '12'),
(130, 'random_ads', '0'),
(131, 'show_ads', '1'),
(132, 'show_online_list_today', '0'),
(133, 'show_list_last_5_posts_member', '0'),
(134, 'last_subject_writer_nm', '5'),
(135, 'last_subject_writer_not_in', '0'),
(136, 'activate_chat_bar', '0'),
(137, 'chat_message_num', '10'),
(138, 'chat_num_mem_posts', '5'),
(139, 'chat_num_characters', '650'),
(140, 'chat_hide_country', '0'),
(141, 'characters_keyword_search', '4'),
(142, 'flood_search', '40'),
(143, 'allowed_emailed', '1'),
(144, 'allowed_emailed_pm', '1'),
(145, 'rewriterule', '1'),
(146, 'sitemap', '1'),
(147, 'allowed_powered', '0'),
(148, 'visitor_message_chars', '8000'),
(149, 'active_addons', '1'),
(150, 'haid_links_for_guest', '0'),
(151, 'guest_message_for_haid_links', 'Please register to see links'),
(152, 'add_tags_automatic', '0'),
(153, 'mailer', 'phpmail'),
(154, 'smtp_secure', 'TLS'),
(155, 'smtp_port', '25'),
(156, 'smtp_server', ''),
(157, 'smtp_username', ''),
(158, 'smtp_password', ''),
(159, 'mor_hours_online_today', '0'),
(160, 'mor_seconds_online', '300'),
(161, 'sub_columns_number', '2'),
(162, 'icon_columns_number', '6'),
(163, 'smil_columns_number', '3'),
(164, 'avatar_columns_number', '6'),
(165, 'icons_numbers', '12'),
(166, 'datesystem', 'd-m-Y'),
(167, 'timeoffset', 'Asia/Riyadh'),
(168, 'active_forum_online_number', '0'),
(169, 'active_birth_date', '1'),
(170, 'active_worms_pbb', '0'),
(171, 'shelluser', ''),
(172, 'shellpswd', ''),
(173, 'shelladminemail', ''),
(174, 'active_like_facebook', '0'),
(175, 'active_add_this', '0'),
(176, 'active_visitor_message', '1'),
(177, 'active_friend', '1'),
(178, 'active_archive', '1'),
(179, 'active_calendar', '1'),
(180, 'active_send_admin_message', '1'),
(181, 'active_reply_today', '1'),
(182, 'active_subject_today', '1'),
(183, 'active_static', '1'),
(184, 'active_team', '1'),
(185, 'active_rss', '1'),
(186, 'title_portal', 'PBB Portal'),
(187, 'active_portal', '1'),
(188, 'portal_section_news', '2'),
(189, 'portal_columns', '3'),
(190, 'portal_news_num', '4'),
(191, 'portal_news_along', '300'),
(192, 'cssprefs', 'PBBoard_1_Default'),
(193, 'captcha_type', 'captcha_IMG'),
(194, 'questions', ''),
(195, 'answers', ''),
(196, 'adsense_limited_sections', '9,8'),
(197, 'activ_welcome_message', '0'),
(198, 'welcome_message_text', 'Hello and welcome {username} in {title} Please see the Forum Rules on the following link {rules} and we wish you to spend useful time and fun with us!'),
(199, 'welcome_message_mail_or_private', '3'),
(200, 'num_entries_error', '7'),
(201, 'style_block_latest_news', '1'),
(202, 'search_engine_spiders', 'Googlebot,Yahoo!,msnbot,Googlebot-Image,Gaisbot,GalaxyBot,msnbot,Rambler,AbachoBOT,accoona,AcoiRobot,ASPSeek,CrocCrawler,Dumbot,FAST-WebCrawler,GeonaBot,Lycos,MSRBOT,Scooter,AltaVista,IDBot,eStyle,Scrubby'),
(203, 'users_ratings_cache', 'a:6:{i:0;a:3:{s:2:\"id\";s:1:\"1\";s:6:\"rating\";s:31:\"look/images/rating/rating_0.gif\";s:5:\"posts\";s:2:\"10\";}i:1;a:3:{s:2:\"id\";s:1:\"2\";s:6:\"rating\";s:31:\"look/images/rating/rating_1.gif\";s:5:\"posts\";s:2:\"20\";}i:2;a:3:{s:2:\"id\";s:1:\"3\";s:6:\"rating\";s:31:\"look/images/rating/rating_2.gif\";s:5:\"posts\";s:2:\"40\";}i:3;a:3:{s:2:\"id\";s:1:\"4\";s:6:\"rating\";s:31:\"look/images/rating/rating_3.gif\";s:5:\"posts\";s:3:\"400\";}i:4;a:3:{s:2:\"id\";s:1:\"5\";s:6:\"rating\";s:31:\"look/images/rating/rating_4.gif\";s:5:\"posts\";s:3:\"600\";}i:5;a:3:{s:2:\"id\";s:1:\"6\";s:6:\"rating\";s:31:\"look/images/rating/rating_5.gif\";s:5:\"posts\";s:4:\"6000\";}}'),
(204, 'users_titles_cache', 'a:5:{i:0;a:3:{s:2:\"id\";s:1:\"1\";s:9:\"usertitle\";s:6:\"Ø¹Ø¶Ùˆ\";s:5:\"posts\";s:1:\"0\";}i:1;a:3:{s:2:\"id\";s:1:\"3\";s:9:\"usertitle\";s:17:\"Ø¹Ø¶Ùˆ Ù…Ø´Ø§Ø±Ùƒ\";s:5:\"posts\";s:2:\"10\";}i:2;a:3:{s:2:\"id\";s:1:\"4\";s:9:\"usertitle\";s:15:\"Ø¹Ø¶Ùˆ ÙØ¹Ø§Ù„\";s:5:\"posts\";s:2:\"20\";}i:3;a:3:{s:2:\"id\";s:1:\"5\";s:9:\"usertitle\";s:17:\"Ø¹Ø¶Ùˆ Ù…Ø³Ø§Ù‡Ù…\";s:5:\"posts\";s:2:\"30\";}i:4;a:3:{s:2:\"id\";s:1:\"6\";s:9:\"usertitle\";s:15:\"Ø¹Ø¶Ùˆ Ø±Ø§Ø¦Ø¹\";s:5:\"posts\";s:2:\"90\";}}'),
(205, 'users_security', '1'),
(206, 'sidebar_list_active', '1'),
(207, 'sidebar_list_align', 'left'),
(208, 'sidebar_list_pages', 'index'),
(209, 'sidebar_list_width', '26'),
(210, 'sidebar_list_exclusion_forums', '254,545'),
(211, 'sidebar_list_content', '{template}login_box{/template}\n{template}whatis_new{/template}'),
(212, 'last_posts_cache', ''),
(213, 'last_time_cache', ''),
(214, 'groups_cache', ''),
(215, 'custom_bbcodes_list_cache', ''),
(216, 'rss_feeds_cache', ''),
(217, 'extrafields_cache', ''),
(218, 'awards_cache', ''),
(219, 'pages_cache', ''),
(220, 'adsenses_cache', ''),
(221, 'languages_list_cache', ''),
(222, 'styles_list_cache', ''),
(223, 'p_cache', ''),
(224, 'last_time_updates', ''),
(225, 'mobile_style_id', '1');";

$inserts[] = "INSERT INTO pbb_lang (id, lang_title, lang_order, lang_on, lang_path) VALUES
(1, 'Arabic', 1, 1, 'rtl'),
(2, 'English', 2, 1, 'ltr');";


$inserts[] = "INSERT INTO pbb_section (id, title, section_describe, parent, sort, section_password, show_sig, use_power_code_allow, section_picture, sectionpicture_type, use_section_picture, linksection, linkvisitor, linksite, subject_order, hide_subject, last_writer, last_subject, last_subjectid, last_date, sec_section, sig_iteration, subject_num, reply_num, forums_cache, moderators, sectiongroup_cache, footer, header, review_subject, icon, last_time, last_reply, last_berpage_nm, prefix_subject, active_prefix_subject, forum_title_color, trash, subjects_review_num, replys_review_num) VALUES
(1, 'Test Section', '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '', 0, 0, '', '', 0, '', 0, 0, 0, 0, '', '', '', '', '', 0, '', '', 0, 0, '', 0, '', 0, 0, 0),
(2, 'Test Forum', 'Test Forum You can delete it whenever you want', 1, 1, '', 1, 1, '', 2, 0, 0, 0, '', 1, 0, '', '', 0, '', 0, 0, 0, 0, '', '', '', '', '', 0, '', '', 0, 0, '', 0, '', 0, 0, 0);";

$inserts[] = "INSERT INTO pbb_sectiongroup (id, section_id, group_id, view_section, view_subject, download_attach, write_subject, write_reply, upload_attach, edit_own_subject, edit_own_reply, del_own_subject, del_own_reply, write_poll, vote_poll, no_posts, main_section, group_name) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Administrator'),
(2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Deputy Administrator'),
(3, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Moderators'),
(4, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Members'),
(5, 1, 5, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 'Validating'),
(6, 1, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Banneds'),
(7, 1, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Guests'),
(8, 1, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'General Supervisor'),
(9, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Administrator'),
(10, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Deputy Administrator'),
(11, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 'Moderators'),
(12, 2, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 'Members'),
(13, 2, 5, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'Validating'),
(14, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Banneds'),
(15, 2, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Guests'),
(16, 2, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'General Supervisor');";

$inserts[] = "INSERT INTO pbb_smiles (id, smile_short, smile_path, smile_type) VALUES
(1, ':)', 'look/images/smiles/smile.gif', 0),
(2, ';)', 'look/images/smiles/wink_3.gif', 0),
(3, ':roll:', 'look/images/smiles/rolleyes.gif', 0),
(4, ':D', 'look/images/smiles/biggrin2.gif', 0),
(5, ':cool:', 'look/images/smiles/cool.gif', 0),
(6, ':lol:', 'look/images/smiles/laugh.gif', 0),
(7, ':(', 'look/images/smiles/sad.gif', 0),
(8, ':mad:', 'look/images/smiles/mad_1.gif', 0),
(9, ':#', 'look/images/smiles/blushing.gif', 0),
(10, ':@@:', 'look/images/smiles/blink.gif', 0),
(11, ':yes:', 'look/images/smiles/yes.gif', 0),
(12, ':no:', 'look/images/smiles/no_1.gif', 0),
(13, ':hmm:', 'look/images/smiles/g.gif', 0),
(14, '', 'look/images/icons/bomb.gif', 1),
(15, '', 'look/images/icons/boxed.gif', 1),
(16, '', 'look/images/icons/bye2.gif', 1),
(17, '', 'look/images/icons/clap_1.gif', 1),
(18, '', 'look/images/icons/coffee.gif', 1),
(19, '', 'look/images/icons/cry.gif', 1),
(20, '', 'look/images/icons/cupidarrow.gif', 1),
(21, '', 'look/images/icons/devil_2.gif', 1),
(22, '', 'look/images/icons/g.gif', 1),
(23, '', 'look/images/icons/icecream.gif', 1),
(24, '', 'look/images/icons/king.gif', 1),
(25, '', 'look/images/icons/lock.gif', 1),
(26, '', 'look/images/icons/marsa117.gif', 1),
(27, '', 'look/images/icons/mf_bookread.gif', 1),
(28, '', 'look/images/icons/smoke.gif', 1),
(29, '', 'look/images/icons/thumbup.gif', 1),
(30, '', 'look/images/icons/tooth.gif', 1),
(31, '', 'look/images/icons/vertag.gif', 1),
(32, '', 'look/images/icons/wub.gif', 1),
(33, '', 'look/images/icons/winner_first_h4h.gif', 1),
(34, '', 'look/images/icons/winner_second_h4h.gif', 1),
(35, '', 'look/images/icons/winner_third_h4h.gif', 1);";


$inserts[] = "INSERT INTO pbb_style (id, style_title, style_on, style_order, style_path, image_path, template_path, cache_path) VALUES
(1, 'default-style', 1, 1, '../styles/default/css/style.css', '../styles/default/images', '', '');";


$inserts[] = "INSERT INTO pbb_toolbox (id, name, tool_type) VALUES
(1, 'Tahoma', 1),
(2, 'Times new roman', 1),
(3, 'Courier new', 1),
(4, 'Arial', 1),
(5, 'skyblue', 2),
(6, 'royalblue', 2),
(7, 'blue', 2),
(8, 'darkblue', 2),
(9, 'orange', 2),
(10, 'orangered', 2),
(11, 'crimson', 2),
(12, 'red', 2),
(13, 'firebrick', 2),
(14, 'darkred', 2),
(15, 'green', 2),
(16, 'limegreen', 2),
(17, 'seagreen', 2),
(18, 'deeppink', 2),
(19, 'tomato', 2),
(20, 'coral', 2),
(21, 'purple', 2),
(22, 'indigo', 2),
(23, 'burlywood', 2),
(24, 'sandybrown', 2),
(25, 'sienna', 2),
(26, 'chocolate', 2),
(27, 'teal', 2),
(28, 'silver', 2);";

$inserts[] = "INSERT INTO pbb_userrating (id, rating, posts) VALUES
(1, 'look/images/rating/rating_0.gif', 10),
(2, 'look/images/rating/rating_1.gif', 100),
(3, 'look/images/rating/rating_2.gif', 200),
(4, 'look/images/rating/rating_3.gif', 400),
(5, 'look/images/rating/rating_4.gif', 600),
(6, 'look/images/rating/rating_5.gif', 1000);";

$inserts[] = "INSERT INTO pbb_usertitle (id, usertitle, posts) VALUES
(1, 'New member	', 2),
(2, 'Associate Member', 100),
(3, 'Active Member	', 250),
(4, 'energetic Member', 500),
(5, 'Senior Member', 750),
(6, 'brilliant member', 1000),
(7, 'important member', 1500),
(8, 'Super Member', 2000),
(9, 'Star Member', 3000),
(10, 'Super Star Member', 5000),
(11, 'Silver Member', 8000),
(12, 'Gold Member', 11000),
(13, 'Massey Member', 14000),
(14, 'Prince of the Forum', 17000),
(15, 'The Emperor', 50000);";
?>