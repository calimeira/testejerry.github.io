import React from 'react';

import { Helmet, HelmetProvider } from 'react-helmet-async';

class Seo extends React.Component {

  constructor(props) {
    super(props);
  }

  render() {

    return (
      <div>
        <HelmetProvider>
          <Helmet>
            <title>{this.props.title}</title>
            <meta name="description" content={this.props.content} />
            <meta name="keywords" content={this.props.keywords}/>
            <meta property="og:title" content={this.props.title} />
            <meta property="og:description" content={this.props.content} />
            <meta name="twitter:title" content={this.props.title}></meta>
            <meta name="twitter:description" content={this.props.content}></meta>
          </Helmet>
        </HelmetProvider>
      </div>
    )
  }

}

export default Seo; 