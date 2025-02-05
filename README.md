# 📄 Webpage-to-Image (Laravel + Browsershot)

This Laravel project allows you to **convert any webpage into an image or PDF** using [`Spatie\Browsershot\Browsershot`](https://github.com/spatie/browsershot).

---

## 📌 Features
✅ Convert a webpage to an **image (PNG)**  
✅ Convert a webpage to a **PDF**  
✅ Uses **Google Chrome (Puppeteer) for rendering**  
✅ Simple **REST API endpoints**  

---

## 🚀 Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/yourusername/webpage-to-image.git
cd webpage-to-image
```

### 2️⃣ Install Laravel Dependencies
```sh
composer install
```

### 3️⃣ Install Browsershot & Puppeteer
```sh
composer require spatie/browsershot
npm install puppeteer
```

For Linux users, install Chromium:  
```sh
sudo apt install chromium
```

### 4️⃣ Configure Environment
Copy `.env.example` to `.env` and generate an app key:  
```sh
cp .env.example .env
php artisan key:generate
```

### 5️⃣ Create Storage Link (Optional)
```sh
php artisan storage:link
```

### 6️⃣ Start Laravel Server
```sh
php artisan serve
```

---

## 📡 API Usage
Once the server is running, you can use the following API endpoints:

### 📷 Convert a Webpage to Image (PNG)
**Endpoint:**  
```plaintext
GET /capture-image?url=https://example.com
```
**Example Request:**  
```sh
curl "http://127.0.0.1:8000/capture-image?url=https://google.com" --output google.png
```
**Response:**  
📥 Downloads the screenshot as `screenshot.png`

---

### 📄 Convert a Webpage to PDF
**Endpoint:**  
```plaintext
GET /capture-pdf?url=https://example.com
```
**Example Request:**  
```sh
curl "http://127.0.0.1:8000/capture-pdf?url=https://google.com" --output google.pdf
```
**Response:**  
📥 Downloads the webpage as `webpage.pdf`

---

## 🛠 Troubleshooting

### 1️⃣ Puppeteer Issues
If you see an error related to **Puppeteer**, try:
```sh
npm install puppeteer --legacy-peer-deps
```

### 2️⃣ Browsershot Not Working?
Ensure that Node.js & NPM are installed and Chromium is available:  
```sh
node -v
npm -v
which chromium
```
If missing, install them.

---

## 📜 License
This project is open-source and licensed under the **MIT License**.

---

## 💡 Credits
Created by **SK Toufiq Ahamed** | Inspired by [Spatie Browsershot](https://github.com/spatie/browsershot)

