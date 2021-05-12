import React from 'react'
import ReactDom from 'react-dom'
import './index.css'

const books = [
  {
    id:1,
    img :'https://www.mail-signatures.com/wp-content/uploads/2019/02/How-to-find-direct-link-to-image_Blog-Picture.png',
    title:"A litle smill",
    author:"James Piter"
  },
  {
    id:2,
    img :'https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2019/July/amazonbasics_520x520._SY304_CB442725065_.jpg',
    title:"The Big Bang",
    author:"Mario Manuel"
  }
]

function BookList(){
  return (
      <section className="booklist">
        {
          books.map((book) => {
            return (<Book key={book.id} {...book}/>)
          })
        }
      </section>
  )
}

const Book = (props) => {

  const {img, title, author} = props
  const clickHandler = (e) => {
    console.log(e)
    console.log(e.target)
    alert("Hello")
  }

  const complexExample = (author) => {
    console.log(author)
  }

  return (
    <article className="book" onMouseOver={() => {
      console.log(title)
    }}>
      <img src={img} alt=""/>
      <h1 onClick={() => console.log(title)} >{title}</h1>
      <h4>{author}</h4>
      <button type="button" onClick={clickHandler}>reference example</button>
      <button type="button" onClick={() => complexExample(author)}>complex example</button>
    </article>
  )
}

ReactDom.render(
  <BookList/>,
  document.getElementById('root')
)