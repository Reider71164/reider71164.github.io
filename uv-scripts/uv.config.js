self.__uv$config = {
    prefix: '/service/',
    bare: 'https://bare.benrogo.net',
    encodeUrl: Ultraviolet.codec.xor.encode,
    decodeUrl: Ultraviolet.codec.xor.decode,
    handler: '/uv-scripts/uv.handler.js',
    bundle: '/uv-scripts/uv.bundle.js',
    config: '/uv-scripts/uv.config.js',
    sw: '/uv-scripts/uv.sw.js',
};
