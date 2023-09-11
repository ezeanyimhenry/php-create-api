<?php
header('Content-Type: application/json');

// Get query parameters
$slackName = $_GET['slack_name'] ?? '';
$track = $_GET['track'] ?? '';

// Get current day of the week
$currentDay = date('l');

// Get current UTC time
date_default_timezone_set('UTC');
$currentUtcTime = date('Y-m-d\TH:i:s\Z');

// Get the GitHub file URL and repo URL (replace with your URLs)
$githubFileUrl = 'https://github.com/ezeanyimhenry/php-create-api/blob/main/stage1.php';
$githubRepoUrl = 'https://github.com/ezeanyimhenry/php-create-api';

// Define the response data
$response = [
    'slack_name' => $slackName,
    'current_day' => $currentDay,
    'utc_time' => $currentUtcTime,
    'track' => $track,
    'github_file_url' => $githubFileUrl,
    'github_repo_url' => $githubRepoUrl,
    'status_code' => 200,
];

// Return the JSON response
echo json_encode($response);
