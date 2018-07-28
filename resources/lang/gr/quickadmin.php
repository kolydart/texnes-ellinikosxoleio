<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Κριτές',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'arts' => [		'title' => 'Τέχνες',		'fields' => [			'name' => 'Τίτλος',		],	],
		'papers' => [		'title' => 'Προτάσεις',		'fields' => [			'title' => 'Τίτλος',			'art' => 'Τέχνη',			'type' => 'Τύπος',			'duration' => 'Διάρκεια',			'name' => 'Ονοματεπώνυμο',			'email' => 'Email',			'attribute' => 'Ιδιότητα',			'document' => 'Αρχείο',			'assign' => 'Ανάθεση',			'status' => 'Status',			'informed' => 'Informed',			'reviews' => 'Reviews',		],	],
		'testpaper' => [		'title' => 'Testpaper',		'fields' => [		],	],
		'judgements' => [		'title' => 'Κρίσεις',		'fields' => [			'paper' => 'Paper',			'judgement' => 'Judgement',			'comment' => 'Comment',		],	],
		'content-management' => [		'title' => 'Διαχείριση περιεχομένου',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Κατηγορίες',		'fields' => [		],	],
		'content-tags' => [		'title' => 'Ετικέτες',		'fields' => [		],	],
		'content-pages' => [		'title' => 'Σελίδες',		'fields' => [		],	],
		'user-actions' => [		'title' => 'Ενέργειες χρηστών',		'created_at' => 'Time',		'fields' => [		],	],
		'user-actions' => [		'title' => 'Ενέργειες χρηστών',		'created_at' => 'Time',		'fields' => [		],	],
		'content-management' => [		'title' => 'Διαχείριση περιεχομένου',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Κατηγορίες',		'fields' => [		],	],
		'content-tags' => [		'title' => 'Ετικέτες',		'fields' => [		],	],
		'content-pages' => [		'title' => 'Σελίδες',		'fields' => [		],	],
		'content-management' => [		'title' => 'Διαχείριση περιεχομένου',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Κατηγορίες',		'fields' => [			'title' => 'Κατηγορία',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Ετικέτες',		'fields' => [			'title' => 'Ετικέτα',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Σελίδες',		'fields' => [			'title' => 'Τίτλος',			'category-id' => 'Κατηγορίες',			'tag-id' => 'Ετικέτες',			'page-text' => 'Κείμενο',			'excerpt' => 'Excerpt',			'featured-image' => 'Εικόνα εμφάνισης',		],	],
		'user-actions' => [		'title' => 'Ενέργειες χρηστών',		'created_at' => 'Time',		'fields' => [			'user' => 'Χρήστης',			'action' => 'Ενέργεια',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
	'qa_create' => 'Δημιουργία',
	'qa_save' => 'Αποθήκευση',
	'qa_edit' => 'Επεξεργασία',
	'qa_view' => 'Εμφάνιση',
	'qa_update' => 'Ενημέρωησ',
	'qa_list' => 'Λίστα',
	'qa_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'qa_custom_controller_index' => 'index προσαρμοσμένου controller.',
	'qa_logout' => 'Αποσύνδεση',
	'qa_add_new' => 'Προσθήκη νέου',
	'qa_are_you_sure' => 'Είστε σίγουροι;',
	'qa_back_to_list' => 'Επιστροφή στην λίστα',
	'qa_dashboard' => 'Αρχική',
	'qa_delete' => 'Διαγραφή',
	'qa_restore' => 'Επαναφορά',
	'qa_permadel' => 'Μόνιμη διαγραφή',
	'qa_all' => 'Όλα',
	'qa_trash' => 'διεγραμμένα',
	'qa_delete_selected' => 'Διαγραφή επιλεγμένων',
	'qa_category' => 'Κατηγορία',
	'qa_categories' => 'Κατηγορίες',
	'qa_sample_category' => 'Δείγμα κατηγορίας',
	'qa_questions' => 'Ερωτήσεις',
	'qa_question' => 'Ερώτηση',
	'qa_answer' => 'Απάντηση',
	'qa_sample_question' => 'Δείγμα ερώτησης',
	'qa_sample_answer' => 'Δείγμα απάντησης',
	'qa_administrator_can_create_other_users' => 'Διαχειριστής',
	'qa_simple_user' => 'Απλός χρήστης',
	'qa_title' => 'Τίτλος',
	'qa_roles' => 'Ρόλοι',
	'qa_role' => 'Ρόλος',
	'qa_user_management' => 'Διαχείριση χρηστών',
	'qa_users' => 'Χρήστες',
	'qa_user' => 'Χρήστης',
	'qa_name' => 'Όνομα',
	'qa_email' => 'Email',
	'qa_password' => 'Κωδικός',
	'qa_remember_token' => 'Να με θυμάσαι',
	'qa_permissions' => 'Δικαιώματα',
	'qa_user_actions' => 'Ενέργειες χρηστών',
	'qa_action' => 'Ενέργεια',
	'qa_description' => 'Περιγραφή',
	'qa_valid_from' => 'Από',
	'qa_valid_to' => 'Έως',
	'qa_coupons' => 'Κουπόνια',
	'qa_code' => 'Κώδικας',
	'qa_reports' => 'Αναφορές',
	'qa_work_type' => 'Τύπος εργασίας',
	'qa_start_time' => 'Ώρα εκκίνησης',
	'qa_end_time' => 'Ώρα τέλους',
	'qa_expenses' => 'Έξοδα',
	'qa_expense' => 'Έξοδο',
	'qa_amount' => 'Ποσό',
	'qa_income_categories' => 'Κατηγορίες Εισοδημάτων',
	'qa_monthly_report' => 'Μηνιαία αναφορά',
	'qa_companies' => 'Εταιρείες',
	'qa_company_name' => 'Όνομα Εταιρείας',
	'qa_address' => 'Διεύθυνση',
	'qa_website' => 'Ιστοσελίδα',
	'qa_contacts' => 'Επαφές',
	'qa_company' => 'Εταιρεία',
	'qa_first_name' => 'Όνομα',
	'qa_last_name' => 'Επώνυμο',
	'qa_phone' => 'Τηλέφωνο',
	'qa_phone1' => 'Τηλ 1',
	'qa_phone2' => 'Τηλ 2',
	'qa_photo' => 'Φωτογραφία (μέγιστο 8mb)',
	'qa_category_name' => 'Όνομα κατηγορίας',
	'qa_products' => 'Προϊόντα',
	'qa_product_name' => 'Όνομα προϊόντος',
	'qa_price' => 'Τιμή',
	'qa_tags' => 'Ετικέτες',
	'qa_tag' => 'Ετικέτα',
	'qa_photo1' => 'Φωτογραφία1',
	'qa_photo2' => 'Φωτογραφία2',
	'qa_photo3' => 'Φωτογραφία3',
	'qa_calendar' => 'Ημερολόγιο',
	'qa_statuses' => 'Καταστάσεις',
	'qa_task_management' => 'Διαχείριση εργασιών',
	'qa_tasks' => 'Εργασίες',
	'qa_status' => 'Κατάσταση',
	'qa_attachment' => 'Επισύναψη',
	'qa_assets' => 'Περουσιακά στοιχεία',
	'qa_asset' => 'Περουσιακό στοιχείο',
	'qa_serial_number' => 'Σειριακός αριθμός',
	'qa_location' => 'Τοποθεσία',
	'qa_locations' => 'Τοποθεσίες',
	'qa_notes' => 'Σημειώσεις',
	'qa_assets_history' => 'Ιστορία στοιχείων',
	'qa_assets_management' => 'Διαχείριση στοιχείων',
	'qa_content_management' => 'Διαχείριση περιεχομένου',
	'qa_text' => 'Κείμενο',
	'qa_featured_image' => 'Εικόνα εμφάνισης',
	'qa_pages' => 'Σελίδες',
	'qa_axis' => 'Άξονας',
	'qa_show' => 'Εμφάνιση',
	'qa_group_by' => 'Ομαδοποίηση κατά',
	'qa_chart_type' => 'Τύπος Γραφήματος',
	'qa_create_new_report' => 'Δημιουργία νέας αναφοράς',
	'qa_created_at' => 'Δημιουργήθηκε στις',
	'qa_updated_at' => 'Ενημερώθηκε στις',
	'qa_deleted_at' => 'Διαγράφηκε στις',
	'qa_reports_x_axis_field' => 'Άξονας Χ',
	'qa_reports_y_axis_field' => 'Άξονας Ψ',
	'qa_select_crud_placeholder' => 'Παρακαλώ επιλέξτε ένα από τα CRUDs',
	'qa_currency' => 'Νόμισμα',
	'qa_current_password' => 'Τρέχων κωδικός',
	'qa_new_password' => 'Νέος κωδικός',
	'qa_dashboard_text' => 'Είσαι μέσα!',
	'qa_forgot_password' => 'Ξέχασες τον κωδικό σου;',
	'qa_remember_me' => 'Θυμήσου με',
	'qa_login' => 'Είσοδος',
	'qa_change_password' => 'Αλλαγή κωδικού',
	'qa_csv' => 'CSV',
	'qa_print' => 'Εκτύπωση',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Αντιγραφή',
	'qa_reset_password' => 'Καθαρισμός κωδικού',
	'qa_email_greet' => 'Γεια',
	'qa_email_regards' => 'Ευχαριστίες',
	'qa_confirm_password' => 'Επιβεβαίωση κωδικού',
	'qa_if_you_are_having_trouble' => 'Αν έχετε πρόβλημα πατώντας το',
	'qa_please_select' => 'Παρακαλώ επιλέξτε',
	'qa_register' => 'Εγγραφείτε',
	'qa_registration' => 'Εγγραφή',
	'qa_not_approved_title' => 'Δεν είστε αποδεκτός',
	'qa_there_were_problems_with_input' => 'Υπήρξαν προβλήματα με την εισαγωγή',
	'qa_whoops' => 'Ουπς!',
	'qa_file_contains_header_row' => 'Το αρχείο περιέχει επικεφαλίδα;',
	'qa_csvImport' => 'CSV εισαγωγή',
	'qa_csv_file_to_import' => 'CSV αρχείο για εισαγωγή',
	'qa_parse_csv' => 'Πέρασμα CSV',
	'qa_import_data' => 'Εισαγωγή δεδομένων',
	'qa_subscription-billing' => 'Συνδρομές',
	'qa_subscription-payments' => 'Πληρωμές',
	'qa_basic_crm' => 'Βασικό CRM',
	'qa_customers' => 'Πελάτες',
	'qa_customer' => 'Πελάτης',
	'qa_select_all' => 'Επιλογή όλων',
	'qa_deselect_all' => 'Αποεπιλογή όλων',
	'qa_team-management' => 'Ομάδες',
	'qa_team-management-singular' => 'Ομάδα',
	'quickadmin_title' => 'conference-management-system',
];