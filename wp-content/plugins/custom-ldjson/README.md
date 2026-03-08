# Custom LD-JSON Manager

**Version:** 1.0  
**Author:** Your Name  
**License:** GPLv2 or later  

A lightweight WordPress plugin that allows site administrators to manage **JSON-LD structured data** directly from the admin dashboard. The plugin automatically injects the JSON-LD into the `<head>` section of your site, helping improve SEO and rich results.

---

## Why JSON-LD is Important

**JSON-LD** (JavaScript Object Notation for Linked Data) is the recommended format for structured data by **Google**. Structured data helps search engines understand the content and context of your website, enabling:

- Rich snippets in search results (stars, reviews, events, products)
- Enhanced visibility in Google Search and other search engines
- Improved click-through rates (CTR) from rich search results
- Better indexing and understanding of your site content

**Following Google’s best practices** ensures your structured data is recognized and eligible for rich results:  
[Google Structured Data Guidelines](https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data)  
[Google SEO Starter Guide](https://developers.google.com/search/docs/fundamentals/seo-starter-guide)

Using structured data correctly can give your site a **competitive advantage in search results** and increase organic traffic.

---

## Features

- Add custom JSON-LD to the `<head>` of your site
- Admin-friendly interface with a simple textarea
- Fully managed via WordPress dashboard
- Works with any theme
- Safe and lightweight — no external dependencies
- Helps search engines understand your content better, improving SEO

---

## Installation

1. Upload the `custom-ldjson` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Go to the **LD-JSON** menu in the admin sidebar.
4. Paste your JSON-LD in the textarea and click **Save JSON-LD**.
5. Your structured data will now be automatically output in the site `<head>`.

---

## Usage

1. Navigate to **LD-JSON** in WordPress admin.
2. Enter your JSON-LD script in the textarea.
3. Save changes.
4. The plugin will automatically insert it in all pages’ `<head>`.

> **Tip:** Make sure your JSON-LD is valid. You can validate it using:
> - [Google Rich Results Test](https://search.google.com/test/rich-results)  
> - [Schema Markup Validator](https://validator.schema.org/)

---

## SEO Benefits

Adding JSON-LD structured data provides:

- **Enhanced Search Listings** – Rich snippets like ratings, events, or product info  
- **Better Understanding by Search Engines** – Google can understand page content more accurately  
- **Improved CTR** – Users are more likely to click rich snippets  
- **Potential Featured Snippets** – Increases chances of appearing in “People also ask” or Knowledge Panels  

> Following Google’s structured data best practices ensures your website remains eligible for rich results and avoids errors or penalties.

---

## Changelog

### 1.0
- Initial release
- Admin interface for JSON-LD management
- Automatic injection into `<head>`

---

## Contributing

1. Fork the repository  
2. Create a new branch (`git checkout -b feature-name`)  
3. Commit your changes (`git commit -m "Add new feature"`)  
4. Push to the branch (`git push origin feature-name`)  
5. Create a Pull Request  

---

## License

This plugin is licensed under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

## Screenshots

1. **Admin Settings Page** – Paste JSON-LD in the textarea.  
2. **Front-end Output** – JSON-LD is injected in the `<head>` of your site.