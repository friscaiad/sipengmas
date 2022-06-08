import { instantMeiliSearch } from '@meilisearch/instant-meilisearch'

const sc = instantMeiliSearch(
    'http://localhost:7700',
    'masterKey'
)