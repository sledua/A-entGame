const booksLoaded = () => {
    return {
        type: 'BOOKS_LOADED',
        payload: newBooks
    };
};

export { booksLoaded };