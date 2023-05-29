CREATE TABLE `users` (
    `id` int(100) NOT NULL,
    `username` varchar(20) NOT NULL,
    `email` varchar(50) NOT NULL,
    `phone` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);