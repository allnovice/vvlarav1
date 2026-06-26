# 🚀 New Machine Setup Commands

# Step 1: Clone and prepare environment
git clone <your-github-repo-url>
cd vvlarav1
cp .env.example .env

# Step 2: Install PHP dependencies via Docker container
docker run --rm -u "$(id -u):$(id -g)" -v "$(pwd):/var/www/html" -w /var/www/html laravelsail/php8.3-composer:latest composer install --ignore-platform-reqs

# Step 3: Start Docker Sail containers
./vendor/bin/sail up -d

# Step 4: Initialize database and application keys
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate

# Step 5: Install frontend assets and start Vite dev server
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
