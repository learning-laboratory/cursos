import React from 'react'
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

function BookList(){
  return (
      <section className="booklist">
        {
          books.map((book)=>{
            return (<Book book={book}/>)
          })
        }
      </section>
  )
}

const Book = (props) => {
  const {img, title, author} = props.book
  return (
    <article className="book">
      <img src={img} alt=""/>
      <h1>{title}</h1>
      <h4>{author}</h4>
    </article>
  )
}

ReactDom.render(
  <BookList/>,
  document.getElementById('root')
)