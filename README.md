# Wordpress boilerplate

- 💅 Uses [Stylus](http://stylus-lang.com/) for CSS.
- 📦 Zero config JS bundler with [Parcel](https://parceljs.org/).
- 🖥 Preconfigured to 512Mb upload size.

## Quickstart

**Change the default password in `config/.env`**

```bash
# Start the containers
docker-compose up -d

# Install Deps
yarn
# Watch the JS & CSS
yarn run dev

# Go to http://localhost and activate your theme
```

## Configure `php.ini`

Put your custom php needs in `config/custom.ini`

## Recommended Plugins

- Advanced Custom Fields
- All-in-One WP Migration
- Custom Post Type UI
- W3 Total Cache
- WooCommerce
- Yoast SEO
