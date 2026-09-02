const functions = require('firebase-functions');
const admin = require('firebase-admin');
const express = require('express');
const cors = require('cors');

admin.initializeApp();
const db = admin.firestore();
const app = express();

app.use(cors({ origin: true }));

// Send JSON data to Firestore
app.post('/sendData', async (req, res) => {
    const data = req.body;
    try {
        await db.collection('data').add(data);
        res.status(200).send({ message: 'Data added successfully!' });
    } catch (error) {
        res.status(500).send({ error: 'Error adding data: ' + error.message });
    }
});

// Receive JSON data from Firestore
app.get('/getData', async (req, res) => {
    try {
        const snapshot = await db.collection('data').get();
        const data = snapshot.docs.map(doc => doc.data());
        res.status(200).send(data);
    } catch (error) {
        res.status(500).send({ error: 'Error retrieving data: ' + error.message });
    }
});

exports.api = functions.https.onRequest(app);
