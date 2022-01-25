import fs from 'fs';
const corrosion = '/corrosion.html';
import '../styles/globals.css'

export default async function api(req, res) {
    res.setHeader('Content-Type', 'text/html', charset = 'utf-8');
    res.write(await fs.readFileSync(corrosion, 'utf-8'));
}