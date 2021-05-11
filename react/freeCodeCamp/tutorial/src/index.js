import React, { Children } from 'react'
import ReactDom from 'react-dom'
import './index.css'

const books = [
  {
    img :'https://www.mail-signatures.com/wp-content/uploads/2019/02/How-to-find-direct-link-to-image_Blog-Picture.png',
    title:"A litle smill",
    author:"James Piter"
  },
  {
    img :'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg',
    title:"The Big Bang",
    author:"Mario Manuel"
  }
]

const names = ['A','B','C','D']
const newNames = names.map((name) => {
  return <h1>{name}</h1>
})
console.log(newNames)

function BookList(){
  return (
      <section className="booklist">
        {newNames}
      </section>
  )
}

const Book = (props) => {
  const {img, title, author} = props
  return <article className="book">
    <img src={img} alt="" />
    <h3>{title}</h3>
    <h4>{author}</h4>
  </article>
} 


// const Book = (img, title, author) => {
//   return <article className="book">
//     <img src={img} alt="" />
//     <h3>{title}</h3>
//     <h4>{author}</h4>
//   </article>
// }


// const Book = (props) => {
//   return <article className="book">
//     <img src={props.img} alt="" />
//     <h3>{props.title}</h3>
//     <h4>{props.author}</h4>
//   </article>
// }

ReactDom.render(
  <BookList/>,
  document.getElementById('root')
)