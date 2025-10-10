#!/bin/bash
set -e

# Navigate to web root
cd /var/www/bedrock-neosrx || exit

echo "🚀 Starting deployment..."

# Pull latest changes
git pull origin main

# Install composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Run WordPress core updates (optional)
# wp core update --allow-root

# Run database updates (optional)
# wp core update-db --allow-root

# Activate all plugins (to avoid inactive ones)
echo "🔌 Activating plugins..."
wp plugin activate --all --allow-root

# Activate your main theme (child theme)
echo "🎨 Activating theme..."
wp theme activate astra-child-theme --allow-root

# Clear cache if applicable
# wp cache flush --allow-root

echo "✅ Deployment completed successfully!"
