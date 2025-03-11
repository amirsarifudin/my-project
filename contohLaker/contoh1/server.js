const express = require('express');
const bodyParser = require('body-parser');
const multer = require('multer');
const xlsx = require('xlsx');
const fs = require('fs');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public')); // Serve static files from public directory

// Endpoint for form submission
app.post('/send-message', (req, res) => {
    const { name, email, message } = req.body;

    // Prepare data for Excel
    const data = [[name, email, message]];

    // Create or append to Excel file
    const filePath = path.join(__dirname, 'messages.xlsx');
    let workbook;

    if (fs.existsSync(filePath)) {
        workbook = xlsx.readFile(filePath);
    } else {
        workbook = xlsx.utils.book_new();
    }

    const worksheet = xlsx.utils.aoa_to_sheet(data);
    xlsx.utils.book_append_sheet(workbook, worksheet, 'Messages');
    xlsx.writeFile(workbook, filePath);

    res.sendStatus(200);
});

// Start server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
