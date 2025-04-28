# Digital Business Card

A **modern**, **responsive** digital business card built with **HTML**, **CSS**, **PHP**, and **FontAwesome**.

---

## Features
- Display your **Name**, **Job Title**, **Phone Number**, **Email Address**
- Profile photo with a **circular frame** and **hover animation**
- **Social media icons** (WhatsApp, LinkedIn, Instagram, GitHub)
- Downloadable **vCard** for quick contact saving
- **Dark mode** only, clean and elegant design
- **Fully responsive** for mobile devices (iPhone, iPad, Android)
- **No scrolling** and **no scrollbar**, even on Apple devices
- **Centralized configuration** via a single PHP file

---

## Project Structure
```plaintext
/project-folder
  ├── index.php           # Main page
  ├── config.php          # Configuration file for easy data editing
  ├── style.css           # All styles and animations
  ├── profilbild.jpg      # Profile picture
  ├── download_vcard.php  # (Optional) vCard download functionality
```

---

## Quick Start

1. **Clone or download** the repository to your server or local directory.
2. Open `config.php` and edit your personal information:
   ```php
   <?php
   $config = [
       'name' => 'Your Name',
       'job' => 'Your Job Title',
       'phone' => 'Your Phone Number',
       'email' => 'Your Email Address',
       'profile_image' => 'profilepic.jpg',
       'socials' => [
           'whatsapp' => 'https://wa.me/...',
           'linkedin' => 'https://linkedin.com/in/...',
           'instagram' => 'https://instagram.com/...',
           'github' => 'https://github.com/...'
       ]
   ];
   ?>
   ```
3. Replace `profilepic.jpg` with your own profile picture.  
   **Recommended:** 600x600px, square format, `.jpg` or `.png`.
4. Open `index.php` in your browser — and you’re done!

---

## Profile Picture Requirements
| Property         | Recommendation        |
|:------------------|:-----------------------|
| Format            | `.jpg` or `.png`        |
| Dimensions        | 600px × 600px (square)  |
| File Name         | No spaces or special characters (e.g., `profile.jpg`) |

---

## External Resources
- [FontAwesome 6.5.0](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css) via CDN for social media icons:
  ```html
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  ```

---

## Optional Enhancements
- Customize or extend the vCard download (`download_vcard.php`).
- Add more social media platforms by editing the `socials` array in `config.php`.
- Modify the color scheme, animations, or layout via `style.css`.

---

## License
This project is free for **personal use**.  
For public release or commercial projects, please give appropriate credit or customize it significantly.

---

## Demo
*Coming soon...*

---

**Enjoy your professional, modern digital business card!**
