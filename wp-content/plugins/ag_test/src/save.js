import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function Save({ attributes }) {
  const { heading, content, imageUrl, isChecked, backgroundColor, order } =
    attributes;
  return (
    <div {...useBlockProps.save()}>
      <div style={{ background: backgroundColor }} id='data'>
        <RichText.Content
          tagName='h1'
          value={heading}
          style={{
            textAlign: 'center',
            color: isChecked ? 'black' : 'white',
          }}
          placeholder='Add a title'
        />
        <div
          id='main-block'
          style={{ flexDirection: order ? 'row' : 'row-reverse' }}
        >
          <div
            style={{
              color: isChecked ? 'black' : 'white',
            }}
          >
            <RichText.Content
              tagName='p'
              value={content}
              style={{
                color: isChecked ? 'black' : 'white',
              }}
            />
          </div>

          <div style={{ position: 'relative', width: '50%' }}>
            <img src={imageUrl} alt='no-image' />
          </div>
        </div>
      </div>
    </div>
  );
}
