import fs from 'fs';
const corrosion = '/palladium/index.html';

export default async function api(req, res) {
    res.setHeader('Content-Type', 'text/html', charset = 'utf-8');
    res.write(await fs.readFileSync(corrosion, 'utf-8'));
}