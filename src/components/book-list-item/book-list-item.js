import React, { Fragment } from 'react';
import './book-list-item.css';

const BookListItem = ({ book }) => {
    const { title, color, size } = book;

    return (
        <Fragment>
            <span>{ title }</span>
            <span>{ color }</span>
            <span>{ size }</span>
        </Fragment>
    );
};

export default BookListItem;