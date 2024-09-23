import express from 'express';
import cors from 'cors'; // Import CORS
import path from 'path';
import items from './data.js'; // Adjust path if necessary
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = 3000;

// Use CORS middleware
app.use(cors());

app.use(express.json());

// API endpoint to get all items
app.get('/api/items', (req, res) => {
    res.json(items);
});

// API endpoint to get a specific item by ID
app.get('/api/items/:id', (req, res) => {
    const itemId = parseInt(req.params.id);
    const item = items.find(item => item.id === itemId);

    if (item) {
        res.json(item);
    } else {
        res.status(404).json({ message: 'Item not found' });
    }
});

// API endpoint to search items by keyword
app.get('/api/search/:keyword', (req, res) => {
    const keyword = req.params.keyword.toLowerCase();
    const results = items.filter(item => 
        item.title.toLowerCase().includes(keyword)
    );

    res.json(results);
});

// Serve static files from the Vue app
app.use(express.static(path.join(__dirname, '../awesomeproject/dist')));

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
