import React from 'react';
import { BookstoreServiceConsumer } from '../boock-service-context';

const withBookstoreService = () => (Wrapped) => {
 return (props) => {
     return(
         <BookstoreServiceConsumer>
             {
                (boockstoreService) => {
                    return(<Wrapped { ...props} boockstoreService={boockstoreService}/>); 
                }
             }
         </BookstoreServiceConsumer>
     );
 }
}

export default withBookstoreService;