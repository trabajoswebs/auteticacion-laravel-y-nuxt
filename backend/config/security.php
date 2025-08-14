<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Security Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains security-related configuration options for your
    | Laravel application. These settings help protect against various
    | security vulnerabilities and attacks.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | Configure rate limiting for various endpoints to prevent abuse
    | and brute force attacks.
    |
    */

    'rate_limiting' => [
        'login' => [
            'max_attempts' => env('LOGIN_MAX_ATTEMPTS', 5),
            'decay_minutes' => env('LOGIN_DECAY_MINUTES', 15),
        ],
        'api' => [
            'max_attempts' => env('API_MAX_ATTEMPTS', 60),
            'decay_minutes' => env('API_DECAY_MINUTES', 1),
        ],
        'password_reset' => [
            'max_attempts' => env('PASSWORD_RESET_MAX_ATTEMPTS', 3),
            'decay_minutes' => env('PASSWORD_RESET_DECAY_MINUTES', 60),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Requirements
    |--------------------------------------------------------------------------
    |
    | Configure minimum password requirements to ensure strong passwords.
    |
    */

    'password_requirements' => [
        'min_length' => env('PASSWORD_MIN_LENGTH', 8),
        'require_uppercase' => env('PASSWORD_REQUIRE_UPPERCASE', true),
        'require_lowercase' => env('PASSWORD_REQUIRE_LOWERCASE', true),
        'require_numbers' => env('PASSWORD_REQUIRE_NUMBERS', true),
        'require_symbols' => env('PASSWORD_REQUIRE_SYMBOLS', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Session Security
    |--------------------------------------------------------------------------
    |
    | Configure session security settings to prevent session hijacking
    | and other session-related attacks.
    |
    */

    'session_security' => [
        'regenerate_id' => env('SESSION_REGENERATE_ID', true),
        'regenerate_interval' => env('SESSION_REGENERATE_INTERVAL', 300), // 5 minutes
        'absolute_lifetime' => env('SESSION_ABSOLUTE_LIFETIME', 3600), // 1 hour
    ],

    /*
    |--------------------------------------------------------------------------
    | Input Validation
    |--------------------------------------------------------------------------
    |
    | Configure input validation rules and sanitization options.
    |
    */

    'input_validation' => [
        'sanitize_html' => env('SANITIZE_HTML', true),
        'max_input_length' => env('MAX_INPUT_LENGTH', 10000),
        'allowed_html_tags' => [
            'p', 'br', 'strong', 'em', 'u', 'ol', 'ul', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | File Upload Security
    |--------------------------------------------------------------------------
    |
    | Configure file upload security settings to prevent malicious file uploads.
    |
    */

    'file_upload' => [
        'max_size' => env('MAX_FILE_SIZE', 10240), // 10MB
        'allowed_extensions' => [
            'jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'txt'
        ],
        'scan_for_viruses' => env('SCAN_FILES_FOR_VIRUSES', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Security Headers
    |--------------------------------------------------------------------------
    |
    | Configure additional security headers that will be sent with responses.
    |
    */

    'security_headers' => [
        'enable_hsts' => env('ENABLE_HSTS', true),
        'enable_csp' => env('ENABLE_CSP', true),
        'enable_xss_protection' => env('ENABLE_XSS_PROTECTION', true),
        'enable_content_type_options' => env('ENABLE_CONTENT_TYPE_OPTIONS', true),
        'enable_frame_options' => env('ENABLE_FRAME_OPTIONS', true),
    ],

];


