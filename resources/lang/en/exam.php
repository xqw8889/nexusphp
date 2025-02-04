<?php

return [
    'label' => 'Exam',
    'name' => 'Exam name',
    'index' => 'Exam index',
    'time_range' => 'Exam time',
    'index_text_' . \App\Models\Exam::INDEX_UPLOADED => 'Upload increment',
    'index_text_' . \App\Models\Exam::INDEX_SEED_TIME_AVERAGE => 'Seed time average',
    'index_text_' . \App\Models\Exam::INDEX_DOWNLOADED => 'Download increment',
    'index_text_' . \App\Models\Exam::INDEX_SEED_BONUS => 'Bonus increment',
    'index_text_' . \App\Models\Exam::INDEX_SEED_POINTS => 'Seed points increment',
    'index_text_' . \App\Models\Exam::INDEX_UPLOAD_TORRENT_COUNT => 'Upload torrent increment',
    'filters' => [
        \App\Models\Exam::FILTER_USER_CLASS => 'User class',
        \App\Models\Exam::FILTER_USER_REGISTER_TIME_RANGE => 'Register time range',
        \App\Models\Exam::FILTER_USER_DONATE => 'Donated',
        \App\Models\Exam::FILTER_USER_REGISTER_DAYS_RANGE => 'Range of days of registration',
    ],
    'require_value' => 'Require',
    'current_value' => 'Current',
    'result' => 'Result',
    'result_pass' => 'Pass!',
    'result_not_pass' => '<span style="color: red">Not pass!</span>',
    'checkout_pass_message_subject' => 'Exam pass!',
    'checkout_pass_message_content' => 'Congratulation! You have complete the exam: :exam_name in time(:begin ~ :end)',
    'checkout_not_pass_message_subject' => 'Exam not pass, and account is banned!',
    'checkout_not_pass_message_content' => 'You did not complete the exam: :exam_name in time(:begin ~ :end), and your account has be banned!',
    'ban_log_reason' => 'Not complete exam: :exam_name in time(:begin ~ :end)',
    'ban_user_modcomment' => 'Due to not complete exam: :exam_name(:begin ~ :end), ban by system.',
    'admin' => [
        'list' => [
            'page_title' => 'Exam List'
        ]
    ],
    'recurring' => 'recurring',
    'recurring_daily' => 'once a day',
    'recurring_weekly' => 'once a week',
    'recurring_monthly' => 'once a month',
    'recurring_help' => 'If specified as periodic, the appraisal start time is the start time of the current cycle, and the end time is the end time of the current cycle, which is said to be the natural week/month. At the end of each cycle, if the user still meets the screening criteria, the user will be automatically assigned to the next cycle.' ,

    'time_condition_invalid' => 'The time parameter does not make sense, there are and only one of three items: start time + end time / duration / recurring',
];
