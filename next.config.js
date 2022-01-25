module.exports = {
  images: {
    domains: ['assets.example.com', 'cdn.discordapp.com'],
  },
  rewrites: async () => [
    {
      source: "/public/corrosion.html",
      destination: "/pages/api/corrosionProxy.js",
    },
  ]
}