import React from 'react';
import ReactDom from 'react-dom'

//css
import './index.css';

function BookList(){
  return (
      <section className="booklist">
        <Book/> 
        <Book/> 
        <Book/> 
        <Book/> 
        <Book/> 
        <Book/> 
      </section>
  );
}

const Book = () => {
  return <article className="book">
    <Image/>
    <Title/>
    <Author/>
  </article>
}

const Title = () => <h3>The New World!</h3>;
const Image = () => <img alt="" src="https://www.mail-signatures.com/wp-content/uploads/2019/02/How-to-find-direct-link-to-image_Blog-Picture.png" />
const Author = () => <h4 style={{color:'#617d98', fontSize:'0.75rem', marginTop:"0.25rem"}}>Mario M. Mabande</h4>

ReactDom.render(
  <BookList/>,
  document.getElementById('root')
);