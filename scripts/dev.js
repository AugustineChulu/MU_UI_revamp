import { networkInterfaces } from 'os';
import { spawn } from 'child_process';

function getLocalIP() {
  const nets = networkInterfaces();
  for (const name of Object.keys(nets)) {
    for (const net of nets[name]) {
      if (net.family === 'IPv4' && !net.internal) {
        return net.address;
      }
    }
  }
  return 'localhost';
}

const ip = getLocalIP();
console.log(`▶ Starting Vite on host: ${ip}`);

const vite = spawn('npx', ['vite'], {
  stdio: 'inherit',
  shell: true,
  env: { ...process.env, VITE_DEV_HOST: ip },
});

vite.on('close', (code) => process.exit(code));