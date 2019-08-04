const initialState = {
    books: [
        {
            id: 1,
            title: 'ПОРТМОНЕ УНИВЕРСАЛЬНОЕ',
            color: 'КОРИЧНЕВЫЙ',
            size: '65*92 мм'
        },
        {
            id: 2,
            title: 'ЗАЖИМ УНИВЕРСАЛЬНЫЙ',
            color: 'КРАСНЫЙ',
            size: '112*80* мм'
        }
    ]
};

const reducer = (state = initialState, action) => {
    switch (action.type){
        case 'BOOKS_LOADED':
            return {
                books: action.payload
            };
        default:
            return state;
    } 
};

export default reducer;
