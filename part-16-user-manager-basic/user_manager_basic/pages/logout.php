<?php

// Xóa toàn bộ Session
session_unset();
session_destroy();

// Xóa Cookie Remember Me
setcookie(
    'remember_me',
    '',
    time() - 3600,
    '/'
);

// Chuyển về trang Login
redirect_to('?page=login');