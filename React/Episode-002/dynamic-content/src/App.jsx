import React from 'react'
import './App.css'
import Greeting from './assets/components/Greeting'
import ProductInfo from './assets/components/ProductInfo'
import List from './assets/components/List'
import ServiceList from './assets/components/ServiceList'
import ProductList from './assets/components/ProductList'
import UserList from './assets/components/UserList'

function App() {
    return(
      //1
      // <>
      //   <Greeting/>
      //   <ProductInfo/>
      // </>

      //2
      // <List/>
      //3
      // <>
      //   <ProductList/>
      //   <UserList/>
      // </>

      //4
      <ServiceList/>
    )
  
}

export default App
