# Dynamic Suburb Pages for SEO

This system allows you to rank for "electrician [suburb]" searches across all Melbourne suburbs using a single template file.

## 🎯 How It Works

1. **One Template File**: `suburb-template.php` handles ALL suburb pages
2. **SEO-Friendly URLs**: URLs look like `yoursite.com.au/electrician-carlton`
3. **Dynamic Content**: Each page automatically shows suburb-specific content
4. **Schema Markup**: Built-in structured data for local SEO

## 📁 Files Created

- `suburb-template.php` - Main template that generates all suburb pages
- `suburb-data.php` - Database of suburbs with custom data
- `.htaccess` - URL rewriting rules for clean URLs
- `generate-sitemap.php` - Generates XML sitemap for Google
- `SUBURB-PAGES-README.md` - This file

## 🚀 Setup Instructions

### Step 1: Upload Files
Upload all files to your website root directory via FTP or cPanel.

### Step 2: Test the System
Visit these URLs to test (replace yourdomain.com.au with your actual domain):

- `yourdomain.com.au/electrician-carlton`
- `yourdomain.com.au/electrician-fitzroy`
- `yourdomain.com.au/electrician-richmond`
- `yourdomain.com.au/electrician-brunswick`

Each should show a unique page for that suburb!

### Step 3: Generate Sitemap
1. Run `generate-sitemap.php` in your browser: `yourdomain.com.au/generate-sitemap.php`
2. This creates `sitemap.xml` with all your suburb pages
3. Submit sitemap.xml to Google Search Console

### Step 4: Update Domain
In `generate-sitemap.php`, change this line:
```php
$base_url = 'https://yourdomain.com.au'; // CHANGE THIS
```

## 🎨 URL Formats Supported

The system supports multiple URL patterns:

1. `electrician-carlton` ✅ (Primary - best for SEO)
2. `carlton-electrician` ✅ (Alternative)
3. `suburbs/carlton` ✅ (Category style)

All point to the same template!

## 📍 Adding More Suburbs

Edit `suburb-data.php` and add new suburbs to the `$all_suburbs` array:

```php
'your-suburb' => array(
    'name' => 'Your Suburb',
    'postcode' => '3000',
    'description' => 'Custom description for this suburb.',
    'nearby' => array('Nearby Suburb 1', 'Nearby Suburb 2'),
    'region' => 'North'
),
```

**Currently includes 25+ suburbs:**
- Carlton, Fitzroy, Richmond, Brunswick, Hawthorn
- Kew, Camberwell, Box Hill, St Kilda, Prahran
- South Yarra, Brighton, Elwood, Footscray, Yarraville
- And many more!

## 🔍 SEO Benefits

### 1. **Local Search Ranking**
- Ranks for "electrician [suburb]" searches
- Suburb name in URL, title, H1, throughout content
- Local Schema.org markup for each suburb

### 2. **Google My Business Integration**
- Each page has structured data for that location
- Shows your business serving specific suburbs
- Improves local pack rankings

### 3. **Internal Linking**
- Each suburb page links to nearby suburbs
- Creates strong internal link structure
- Helps Google understand your service areas

### 4. **Unique Content**
- Each page has unique title, description, content
- No duplicate content issues
- Custom data for each suburb

## 📊 Google Search Console Setup

### Step 1: Submit Sitemap
1. Go to Google Search Console
2. Click "Sitemaps" in left menu
3. Enter "sitemap.xml" and submit
4. Google will index all your suburb pages

### Step 2: Monitor Performance
Check "Performance" to see which suburbs bring traffic:
- Search queries by suburb
- Click-through rates
- Ranking positions

### Step 3: Target Low-Performing Suburbs
If certain suburbs don't rank well:
1. Add more content to `suburb-data.php`
2. Create blog posts about that suburb
3. Get backlinks mentioning that suburb

## 🎯 Advanced Customization

### Custom Content Per Suburb
Edit `suburb-data.php` to add custom fields:

```php
'carlton' => array(
    'name' => 'Carlton',
    'postcode' => '3053',
    'description' => 'Custom description',
    'nearby' => array('Parkville', 'Fitzroy'),
    'region' => 'Inner North',
    // ADD CUSTOM FIELDS:
    'image' => 'images/carlton-electrician.jpg',
    'testimonial' => 'Great service in Carlton! - John D.',
    'special_offer' => '20% off for Carlton residents this month',
),
```

Then use in `suburb-template.php`:
```php
<?php if (isset($data['special_offer'])): ?>
    <div class="special-offer">
        <?php echo $data['special_offer']; ?>
    </div>
<?php endif; ?>
```

### Service-Specific Pages
You can create variations for different services:

- `electrician-carlton` (general)
- `emergency-electrician-carlton`
- `commercial-electrician-carlton`
- `lighting-installation-carlton`

Just duplicate the template and modify content!

## 🔧 Troubleshooting

### "Page Not Found" Error
- Check `.htaccess` is uploaded and enabled
- Check your server supports mod_rewrite
- Contact hosting support to enable URL rewriting

### Suburbs Not Showing Correctly
- Check suburb slug matches exactly (lowercase, hyphens for spaces)
- Verify suburb exists in `suburb-data.php`
- Clear browser cache

### Duplicate Content Warning
- Each suburb page should have unique content
- Google is okay with template-based pages if:
  - Title is unique ✅
  - H1 is unique ✅
  - Description is unique ✅
  - Some custom content per suburb ✅

## 📈 Expected Results

### Month 1-2:
- Google starts indexing suburb pages
- Show up for long-tail searches ("emergency electrician carlton")

### Month 3-4:
- Rank for "electrician [suburb]" terms
- Increase in local search traffic

### Month 6+:
- Dominate local searches across multiple suburbs
- Appear in Google's Local Pack for various locations

## 💡 Pro Tips

1. **Content is King**: Add more unique content to each suburb page over time
2. **Get Reviews**: Encourage customers to mention their suburb in reviews
3. **Local Backlinks**: Get links from local directories mentioning specific suburbs
4. **Blog Posts**: Write "Electrician Case Study: Carlton Home Rewire" style posts
5. **Update Regularly**: Refresh content periodically to show Google the pages are active

## 🎉 Next Steps

1. ✅ Upload all files
2. ✅ Test suburb pages work
3. ✅ Generate and submit sitemap
4. ✅ Monitor in Google Search Console
5. 📝 Add more suburbs to `suburb-data.php`
6. 📝 Create suburb-specific blog content
7. 📝 Get local backlinks and citations

## 📞 Questions?

This system is designed to be simple yet powerful. If you need help:
- Check your .htaccess supports URL rewriting
- Ensure PHP is enabled on your server
- Test with simple suburbs first (carlton, fitzroy, richmond)

---

**Remember**: This is 100% legitimate SEO. You're providing genuine service to these suburbs with location-specific content. Google rewards this!

