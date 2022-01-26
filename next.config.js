module.exports = {
  images: {
    domains: ['assets.example.com', 'cdn.discordapp.com'],
  },
  rewrites: async () => [
    {
      source: "/public/palladium/index.html",
      destination: "/pages/api/palladiumProxy.js",
    },
  ]
}